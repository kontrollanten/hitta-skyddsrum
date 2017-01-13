<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-13
 * Time: 19:38
 */

namespace HittaSkyddsrum\App\Foundation;

use Doctrine\Common\Collections\Collection;
use HittaSkyddsrum\App\Foundation\Contracts\PublicObject;
use HittaSkyddsrum\App\Foundation\Contracts\PublicObjectRender as PublicObjectRenderContract;

class PublicObjectRender implements PublicObjectRenderContract
{
    public function render($content)
    {
        if ($this->isIteratable($content))
        {
            return $this->getVisibleDataFromIteratable($content);
        }
        else if ($content instanceof PublicObject)
        {
            return $this->getVisibleDataFromObject($content);
        }

        return $content;
    }

    private function getVisibleDataFromIteratable($iteratable)
    {
        $returnValue = [];

        foreach ($iteratable as $value)
        {
            $returnValue[] = $this->render($value);
        }

        return $returnValue;
    }

    /**
     * @return array
     */
    private function getVisibleDataFromObject(PublicObject $object)
    {
        $output = [];

        foreach ($object->getVisibleAttributes() as $field)
        {
            $getterName = 'get' . ucfirst($field);

            if (method_exists($object, $getterName) === false)
            {
                throw new \RuntimeException('Couldnt find method named ' . $getterName . ' for ' . get_class($object));
            }

            $output[$field] = $this->render($object->$getterName());
        }

        return $output;
    }

    private function isIteratable($var)
    {
        return $var instanceof Collection || is_array($var);
    }
}
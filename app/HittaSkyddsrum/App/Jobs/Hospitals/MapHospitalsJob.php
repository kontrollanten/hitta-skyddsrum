<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-19
 * Time: 15:38
 */

namespace HittaSkyddsrum\App\Jobs\Hospitals;

use HittaSkyddsrum\App\Foundation\EntityMapper;
use HittaSkyddsrum\App\Jobs\Hospitals\Contracts\MapHospitalsJob as MapHospitalsJobContract;
use HittaSkyddsrum\Entities\Hospital;
use HittaSkyddsrum\ValueObjects\Position;

class MapHospitalsJob implements MapHospitalsJobContract
{
    public function handle(array $hospitals)
    {
        $hospitalMeta = [
            'hsaId' => [
                'name' => 'hsaId'
            ],
            'geoLocation' => [
                'name' => 'position',
                'class' => 'HittaSkyddsrum\ValueObjects\Position',
            ],
            'street' => [
                'name' => 'address'
            ],
            'relativeDistinguishedName' => [
                'name' => 'name'
            ],
        ];
        $positionMeta = [
            'longitude' => [
                'name' => 'long'
            ],
            'latitude' => [
                'name' => 'lat'
            ],
            '_new' => function() {
                return new Position(0.0, 0.0);
            }
        ];

        $mapper = new EntityMapper([
            'HittaSkyddsrum\Entities\Hospital' => $hospitalMeta,
            'HittaSkyddsrum\ValueObjects\Position' => $positionMeta
        ], false);

        return $mapper->hydrate($hospitals, 'HittaSkyddsrum\Entities\Hospital', 1);
    }
}
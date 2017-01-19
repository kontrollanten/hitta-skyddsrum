<?php
/**
 * Created by PhpStorm.
 * User: alexander
 * Date: 2017-01-18
 * Time: 18:01
 */

namespace HittaSkyddsrum\App\Jobs\Shelters;

use HittaSkyddsrum\App\Jobs\Shelters\Contracts\GetShelterJob as GetShelterJobContract;
use HittaSkyddsrum\Infrastructure\Doctrine\Repositorities\Contracts\ShelterRepository;

class GetShelterJob implements GetShelterJobContract
{
    private $shelterRepository;

    public function __construct(ShelterRepository $shelterRepository)
    {
        $this->shelterRepository = $shelterRepository;
    }

    public function handle($id)
    {
        return $this->shelterRepository->find($id);
    }
}
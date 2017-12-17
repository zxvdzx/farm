<?php

namespace App\Repositories\Contracts;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface ContactDashboardRepository
 * @package namespace App\Repositories\Contracts;
 */
interface ContactDashboardRepository extends RepositoryInterface
{
	function getIndex();
}
<?php

namespace App\Repositories\Contracts;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface DashboardRepository
 * @package namespace App\Repositories\Contracts;
 */
interface FrontendDashboardRepository extends RepositoryInterface
{
	function getIndex();
}
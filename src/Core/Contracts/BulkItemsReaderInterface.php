<?php

declare(strict_types=1);

namespace Bitrix24\SDK\Core\Contracts;

use Bitrix24\SDK\Core\Exceptions\BaseException;
use Generator;

interface BulkItemsReaderInterface
{
    /**
     * Wrapper for *.list methods for optimized bulk items read
     *
     * This reader used performance optimized read strategy selected by integrations tests
     *
     * @param string   $apiMethod *.list method
     * @param array    $order     elements order
     * @param array    $filter    elements filter
     * @param array    $select    select element fields
     * @param int|null $limit     limit elements or read all elements
     *
     * @return Generator
     * @throws BaseException
     */
    public function getTraversableList(string $apiMethod, array $order, array $filter, array $select, ?int $limit = null): Generator;
}
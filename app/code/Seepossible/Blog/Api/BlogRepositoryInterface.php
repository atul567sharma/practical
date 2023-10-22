<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Seepossible\Blog\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface BlogRepositoryInterface
{

    /**
     * Save Blog
     * @param \Seepossible\Blog\Api\Data\BlogInterface $blog
     * @return \Seepossible\Blog\Api\Data\BlogInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \Seepossible\Blog\Api\Data\BlogInterface $blog
    );

    /**
     * Retrieve Blog
     * @param string $blogId
     * @return \Seepossible\Blog\Api\Data\BlogInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($blogId);

    /**
     * Retrieve Blog matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Seepossible\Blog\Api\Data\BlogSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Blog
     * @param \Seepossible\Blog\Api\Data\BlogInterface $blog
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \Seepossible\Blog\Api\Data\BlogInterface $blog
    );

    /**
     * Delete Blog by ID
     * @param string $blogId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($blogId);
}


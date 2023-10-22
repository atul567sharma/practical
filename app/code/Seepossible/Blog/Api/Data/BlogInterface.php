<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Seepossible\Blog\Api\Data;

interface BlogInterface
{

    const IS_ACTIVE = 'is_active';
    const UPDATED_AT = 'updated_at';
    const BLOG_ID = 'blog_id';
    const DESCRIPTION = 'description';
    const TITLE = 'title';
    const CREATED_AT = 'created_at';

    /**
     * Get blog_id
     * @return string|null
     */
    public function getBlogId();

    /**
     * Set blog_id
     * @param string $blogId
     * @return \Seepossible\Blog\Blog\Api\Data\BlogInterface
     */
    public function setBlogId($blogId);

    /**
     * Get title
     * @return string|null
     */
    public function getTitle();

    /**
     * Set title
     * @param string $title
     * @return \Seepossible\Blog\Blog\Api\Data\BlogInterface
     */
    public function setTitle($title);

    /**
     * Get description
     * @return string|null
     */
    public function getDescription();

    /**
     * Set description
     * @param string $description
     * @return \Seepossible\Blog\Blog\Api\Data\BlogInterface
     */
    public function setDescription($description);

    /**
     * Get is_active
     * @return string|null
     */
    public function getIsActive();

    /**
     * Set is_active
     * @param string $isActive
     * @return \Seepossible\Blog\Blog\Api\Data\BlogInterface
     */
    public function setIsActive($isActive);

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set created_at
     * @param string $createdAt
     * @return \Seepossible\Blog\Blog\Api\Data\BlogInterface
     */
    public function setCreatedAt($createdAt);

    /**
     * Get updated_at
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set updated_at
     * @param string $updatedAt
     * @return \Seepossible\Blog\Blog\Api\Data\BlogInterface
     */
    public function setUpdatedAt($updatedAt);
}


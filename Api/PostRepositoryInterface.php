<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Ashsmith\Blog\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * CMS post CRUD interface.
 * @api
 */
interface PostRepositoryInterface
{
    /**
     * Save post.
     *
     * @param \Ashsmith\Blog\Api\Data\PostInterface $post
     * @return \Ashsmith\Blog\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\Ashsmith\Blog\Api\Data\PostInterface $post);

    /**
     * Retrieve post.
     *
     * @param int $postId
     * @return \Ashsmith\Blog\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($postId);

    /**
     * Retrieve posts matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \Ashsmith\Blog\Api\Data\PostSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete post.
     *
     * @param \Ashsmith\Blog\Api\Data\PostInterface $post
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(\Ashsmith\Blog\Api\Data\PostInterface $post);

    /**
     * Delete post by ID.
     *
     * @param int $postId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($postId);
}

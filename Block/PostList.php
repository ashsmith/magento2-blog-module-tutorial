<?php
namespace Ashsmith\Blog\Block;

use Ashsmith\Blog\Api\Data\PostInterface;
use Ashsmith\Blog\Model\Resource\Post\Collection as PostCollection;
use Magento\Framework\ObjectManagerInterface;

class PostList extends \Magento\Framework\View\Element\Template implements
    \Magento\Framework\Object\IdentityInterface
{

    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Ashsmith\Blog\Model\Resource\Post\CollectionFactory $postCollectionFactory,
     * @param \Magento\Framework\View\Page\Config $pageConfig
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Ashsmith\Blog\Model\Resource\Post\CollectionFactory $postCollectionFactory,
        ObjectManagerInterface $objectManager,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_postCollectionFactory = $postCollectionFactory;
        $this->_objectManager = $objectManager;
    }

    /**
     * @return \Ashsmith\Blog\Model\Resource\Post\Collection
     */
    public function getPosts()
    {
        // Check if posts has already been defined
        // makes our block nice and re-usable! We could
        // pass the 'posts' data to this block, with a collection
        // that has been filtered differently!
        if (!$this->hasData('posts')) {
            $posts = $this->_postCollectionFactory
                ->create()
                ->addOrder(
                    PostInterface::CREATION_TIME,
                    PostCollection::SORT_ORDER_DESC
                );
            $this->setData('posts', $posts);
        }
        return $this->getData('posts');
    }

    /**
     * Return identifiers for produced content
     *
     * @return array
     */
    public function getIdentities()
    {
        return [\Ashsmith\Blog\Model\Post::CACHE_TAG . '_' . 'list'];
    }

}

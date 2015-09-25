<?php
namespace Ashsmith\Blog\Block;

class PostView extends \Magento\Framework\View\Element\Template implements
    \Magento\Framework\DataObject\IdentityInterface
{

    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Ashsmith\Blog\Model\Post $post
     * @param \Ashsmith\Blog\Model\PostFactory $postFactory
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Ashsmith\Blog\Model\Post $post,
        \Ashsmith\Blog\Model\PostFactory $postFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_post = $post;
        $this->_postFactory = $postFactory;
    }

    /**
     * @return \Ashsmith\Blog\Model\Post
     */
    public function getPost()
    {
        // Check if posts has already been defined
        // makes our block nice and re-usable! We could
        // pass the 'posts' data to this block, with a collection
        // that has been filtered differently!
        if (!$this->hasData('post')) {
            if ($this->getPostId()) {
                /** @var \Ashsmith\Blog\Model\Post $page */
                $post = $this->_postFactory->create();
            } else {
                $post = $this->_post;
            }
            $this->setData('post', $post);
        }
        return $this->getData('post');
    }

    /**
     * Return identifiers for produced content
     *
     * @return array
     */
    public function getIdentities()
    {
        return [\Ashsmith\Blog\Model\Post::CACHE_TAG . '_' . $this->getPost()->getId()];
    }

}

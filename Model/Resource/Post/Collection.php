<?php namespace Ashsmith\Blog\Model\Resource\Post;

class Collection extends \Magento\Framework\Model\Resource\Db\Collection\AbstractCollection
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Ashsmith\Blog\Model\Post', 'Ashsmith\Blog\Model\Resource\Post');
    }

}

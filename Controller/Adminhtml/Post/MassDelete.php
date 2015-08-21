<?php
namespace Ashsmith\Blog\Controller\Adminhtml\Post;

use Ashsmith\Blog\Controller\Adminhtml\AbstractMassDelete;

/**
 * Class MassDelete
 */
class MassDelete extends AbstractMassDelete
{
    /**
     * Field id
     */
    const ID_FIELD = 'post_id';

    /**
     * Resource collection
     *
     * @var string
     */
    protected $collection = 'Ashsmith\Blog\Model\Resource\Post\Collection';

    /**
     * Page model
     *
     * @var string
     */
    protected $model = 'Ashsmith\Blog\Model\Post';
}

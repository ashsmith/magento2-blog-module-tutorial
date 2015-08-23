<?php
namespace Ashsmith\Blog\Controller\Adminhtml\Post;

use Ashsmith\Blog\Controller\Adminhtml\AbstractMassStatus;

/**
 * Class MassEnable
 */
class MassEnable extends AbstractMassStatus
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
     * Post model
     *
     * @var string
     */
    protected $model = 'Ashsmith\Blog\Model\Post';

    /**
     * Post enable status
     *
     * @var boolean
     */
    protected $status = true;
}

<?php
namespace Ashsmith\Blog\Controller\Adminhtml\Post;

use Ashsmith\Blog\Controller\Adminhtml\AbstractMassStatus;

/**
 * Class MassDisable
 */
class MassDisable extends AbstractMassStatus
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
    protected $collection = 'Ashsmith\Blog\Model\ResourceModel\Post\Collection';

    /**
     * Page model
     *
     * @var string
     */
    protected $model = 'Ashsmith\Blog\Model\Post';

    /**
     * Page disable status
     *
     * @var boolean
     */
    protected $status = false;
}

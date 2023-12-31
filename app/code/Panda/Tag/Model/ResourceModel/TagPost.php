<?php declare(strict_types=1);

namespace Panda\Tag\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class TagPost extends AbstractDb
{
    const MAIN_TABLE = 'panda_tag_post';
    const ID_FIELD_NAME = 'id';
    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}

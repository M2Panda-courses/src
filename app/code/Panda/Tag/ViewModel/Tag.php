<?php declare(strict_types=1);

namespace Panda\Tag\ViewModel;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Panda\Tag\Api\Data\TagInterface;
use Panda\Tag\Api\Data\TagRepositoryInterface;
use Panda\Tag\Model\ResourceModel\Tag\Collection;
use \Magento\Framework\Exception\LocalizedException;

class Tag implements ArgumentInterface
{
    public function __construct(
        private Collection $collection,
        private TagRepositoryInterface $tagRepository,
        private RequestInterface $request,
    ) {}

    /**
     * @return array
     */
    public function getList(): array
    {
        return $this->collection->getItems();
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->collection->count();
    }

    public function getDetail(): TagInterface
    {
        $id = (int) $this->request->getParam('id');
        return $this->tagRepository->getById($id);
    }
}

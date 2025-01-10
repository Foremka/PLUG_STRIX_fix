<?php

declare(strict_types=1);

namespace Spingo\SpingoWebApi\Model;

use Magento\Framework\DataObject;
use Spingo\SpingoWebApi\Api\Data\SpingoConfirmNotifyItemInterface;

class SpingoConfirmNotifyItem extends DataObject implements SpingoConfirmNotifyItemInterface
{
    public function getSymbol(): string
    {
        return $this->getData('Symbol');
    }

    public function setSymbol(string $symbol): void
    {
        $this->setData('Symbol', $symbol);
    }
    
    public function getValue(): string
    {
        return $this->getData('Value');
    }
    
    public function setValue(string $value): void
    {
        $this->setData('Value', $value);
    }
}

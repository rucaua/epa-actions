<?php

declare(strict_types=1);

namespace rucaua\epa\actions;

abstract class BaseCRUDAction extends BaseAction implements CrudActionInterface
{

    public ?int $entityId = null;
    public ?EntityInterface $entity = null;

    public function setEntity(EntityInterface $entity, ?int $id): self
    {
        $this->entity = $entity;
        $this->entityId = $id;
        return $this;
    }


    /**
     * @return EntityInterface
     * @throws NotFoundException
     */
    protected function getOneOrError(): EntityInterface
    {
        return $this->entity::oneByPk($this->entityId) ?? throw new NotFoundException();
    }

}
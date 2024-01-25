<?php

namespace rucaua\epa\actions;

interface CrudActionInterface extends ActionInterface
{
    public function setEntity(EntityInterface $entity, ?int $id): self;
}
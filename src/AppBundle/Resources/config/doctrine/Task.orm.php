<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\TaskRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'columnName' => 'id',
   'fieldName' => 'id',
   'type' => 'integer',
   'unique' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'nomT',
   'fieldName' => 'nomT',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'descriptionT',
   'fieldName' => 'descriptionT',
   'type' => 'string',
   'length' => 255,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'dateDebutT',
   'fieldName' => 'dateDebutT',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'dateFinT',
   'fieldName' => 'dateFinT',
   'type' => 'date',
  ));
$metadata->mapField(array(
   'columnName' => 'etatT',
   'fieldName' => 'etatT',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);
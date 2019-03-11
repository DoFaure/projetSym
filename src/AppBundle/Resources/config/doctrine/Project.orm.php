<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\ProjectRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'columnName' => 'id',
   'fieldName' => 'id',
   'type' => 'integer',
   'unique' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'nomP',
   'fieldName' => 'nomP',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'descriptionP',
   'fieldName' => 'descriptionP',
   'type' => 'string',
   'length' => 255,
   'nullable' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'dateDebutP',
   'fieldName' => 'dateDebutP',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'dateFinP',
   'fieldName' => 'dateFinP',
   'type' => 'datetime',
  ));
$metadata->mapField(array(
   'columnName' => 'etatP',
   'fieldName' => 'etatP',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'nomClient',
   'fieldName' => 'nomClient',
   'type' => 'string',
   'length' => 255,
   'nullable' => true,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);
<?php

use Doctrine\ORM\Mapping\ClassMetadataInfo;

$metadata->setInheritanceType(ClassMetadataInfo::INHERITANCE_TYPE_NONE);
$metadata->customRepositoryClassName = 'AppBundle\Repository\UserRepository';
$metadata->setChangeTrackingPolicy(ClassMetadataInfo::CHANGETRACKING_DEFERRED_IMPLICIT);
$metadata->mapField(array(
   'columnName' => 'id',
   'fieldName' => 'id',
   'type' => 'integer',
   'unique' => true,
  ));
$metadata->mapField(array(
   'columnName' => 'nameU',
   'fieldName' => 'nameU',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'preU',
   'fieldName' => 'preU',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'mdp',
   'fieldName' => 'mdp',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->mapField(array(
   'columnName' => 'role',
   'fieldName' => 'role',
   'type' => 'string',
   'length' => 255,
  ));
$metadata->setIdGeneratorType(ClassMetadataInfo::GENERATOR_TYPE_AUTO);
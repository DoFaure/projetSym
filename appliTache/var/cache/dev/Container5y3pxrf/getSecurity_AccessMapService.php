<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.access_map' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/AccessMapInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/AccessMap.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/RequestMatcherInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/RequestMatcher.php';

$this->services['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/fr/admin/user/index'), [0 => 'ROLE_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/fr/admin/user/show'), [0 => 'ROLE_ADMIN'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/fr/project/new'), [0 => 'ROLE_CHIEF'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/fr/project/delete/'), [0 => 'ROLE_CHIEF'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/fr/project/'), [0 => 'ROLE_DEV'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/fr/task/'), [0 => 'ROLE_DEV'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/fr/admin/user/dev_available'), [0 => 'ROLE_DEV'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/fr/admin/user/manager_available'), [0 => 'ROLE_DEV'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/(login$|resetting|register)'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/fr/$'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);
$instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/fr/'), [0 => 'IS_AUTHENTICATED_ANONYMOUSLY'], NULL);

return $instance;

<?php
/**
 * This file is part of prooph/proophessor-do.
 * (c) 2014-2016 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\ProophessorDo\Container\App\Action;

use Interop\Container\ContainerInterface;
use Prooph\ProophessorDo\App\Action\UserList;
use Prooph\ServiceBus\QueryBus;
use Zend\Expressive\Template\TemplateRendererInterface;

class UserListFactory
{
    public function __invoke(ContainerInterface $container): UserList
    {
        return new UserList($container->get(TemplateRendererInterface::class), $container->get(QueryBus::class));
    }
}

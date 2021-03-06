<?php
/**
 * This file is part of prooph/proophessor-do.
 * (c) 2014-2017 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2017 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\ProophessorDo\Container\App\Action;

use Prooph\ProophessorDo\App\Action\UserTodoForm;
use Prooph\ServiceBus\QueryBus;
use Psr\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class UserTodoFormFactory
{
    public function __invoke(ContainerInterface $container): UserTodoForm
    {
        return new UserTodoForm($container->get(TemplateRendererInterface::class), $container->get(QueryBus::class));
    }
}

<?php

namespace Tests;

use Orchestra\Testbench\TestCase;

/**
 * IntegrationTest.
 *
 * @category TestCase
 *
 * @author   ney <zoobile@gmail.com>
 * @license  MIT https://github.com/swooliy/laraket/me/LICENSE.md
 *
 * @see     https://github.com/swooliy/laraket/me
 */
abstract class IntegrationTest extends TestCase
{
    /**
     * Setup the test case.
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->app['config']->set('app.key', 'base64:UTyp33UhGolgzCK5CJmT+hNHcA+dJyp3+oINtX+VoPI=');

        // $this->loadLaravelMigrations(['--database' => 'testing']);

        // $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->artisan('migrate', ['--database' => 'testing'])->run();
    }

    /**
     * Tear down the test case.
     */
    protected function tearDown(): void
    {
        $this->artisan('migrate:reset', ['--database' => 'testing'])->run();

        parent::tearDown();
    }

    /**
     * Get the service providers for the package.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            'Ney\PackageBone\PackageBoneServiceProvider',
        ];
    }

    /**
     * Override application aliases.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array
     */
    protected function getApplicationAliases($app)
    {
        return [
        ];
    }

    /**
     * Configure the environment.
     *
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }
}

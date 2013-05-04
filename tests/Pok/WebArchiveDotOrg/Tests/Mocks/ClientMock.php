<?php

namespace Pok\WebArchiveDotOrg\Tests\Mocks;

use Pok\WebArchiveDotOrg\Request;

class ClientMock
{
    /**
     * @var string
     */
    protected $client;

    /**
     * Constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->client = sprintf('%s/../fixtures/%s.html', __DIR__, $request->getUri());
    }

    /**
     * @return ResponseListMock
     */
    public function send()
    {
        return new ResponseListMock($this->client);
    }
}

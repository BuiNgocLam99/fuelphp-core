    public static function setUpBeforeClass(): void
    {
        \Migrate::latest('auth', 'package');
    }

/**
* @depends testCreateUser
* @depends clone testCreateUser
*/

 /**
 * @depends testProducerFirst
 * @depends testProducerSecond
 */
public function testConsumer(string $a, string $b) // testProducerFirst, testProducerSecond là producer, testConsumer là consumer

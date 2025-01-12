    public static function setUpBeforeClass(): void
    {
        \Migrate::latest('auth', 'package');
    }

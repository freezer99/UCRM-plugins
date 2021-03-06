# Developer documentation

Plugins are PHP programs, that extend functionality of UCRM. They are automatically executed based on user defined period and can handle things like importing payments from bank accounts, synchronizing UCRM data with other systems and many more.

## Distribution
Plugins are distributed as ZIP archives. User uploads the archive into UCRM, it's validated and if valid, extracted to a folder based on plugin's name.

## File structure
The minimum valid plugin consists of 2 files, [`manifest.json`](file-structure.md#manifestjson) and [`main.php`](file-structure.md#mainphp).
These files are required for successful installation in UCRM. Other than the required files, archives can contain anything the plugin needs (with some exceptions - see [reserved files](file-structure.md#reserved-files)).

Read more in the [File structure](file-structure.md) documentation.

## Security
The plugins can also add custom pages via `public.php`. You can put additional security restrictions on these pages if desired.

Read more in the [Security](security.md) documentation.

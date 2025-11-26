# Hero Statistics in Filament Admin

I have configured the `HeroStatisticResource` to appear in the "Home Page" section of the Filament admin panel and enabled translations for both title and number fields.

## Changes

### Filament Resource Configuration

Modified `app/Filament/Resources/HeroStatisticResource.php` to include the navigation group, sort order, and translatable locales.

```php
protected static ?string $navigationGroup = 'Home Page';
protected static ?int $navigationSort = 1;

public static function getTranslatableLocales(): array
{
    return ['en', 'ar'];
}
```

### Filament Pages Configuration

Updated `CreateHeroStatistic.php` and `EditHeroStatistic.php` to use the `Translatable` trait and include the `LocaleSwitcher` action. This is critical for the translation UI to appear.

**CreateHeroStatistic.php**

```php
use CreateRecord\Concerns\Translatable;

protected function getActions(): array
{
    return [
        Actions\LocaleSwitcher::make(),
    ];
}
```

**EditHeroStatistic.php**

```php
use EditRecord\Concerns\Translatable;

protected function getActions(): array
{
    return [
        Actions\LocaleSwitcher::make(),
        Actions\DeleteAction::make(),
    ];
}
```

### Model Configuration

Modified `app/Models/HeroStatistic.php` to make both `title` and `number` translatable.

```php
public $translatable = ['title', 'number'];
```

### Database Schema

Updated `database/migrations/2025_11_26_151609_create_hero_statistics_table.php` to use `text` for the `number` column to support JSON translations.

```php
$table->text('title')->nullable();
$table->text('number')->nullable();
```

### Frontend Update

Modified `resources/views/web/frontend/pages/home.blade.php` to hide the hero statistics section if there are no statistics available.

```blade
@if(count($heroStats) > 0)
<div class="hero-stats">
    ...
</div>
@endif
```

## Verification

1.  **Admin Panel**: Log in to the Filament admin panel.
2.  **Navigation**: Check the sidebar for the "Home Page" group.
3.  **Hero Statistics**: Verify that "Hero Statistics" is listed within this group.
4.  **Translations**: Create a new Hero Statistic. You should see a locale switcher (English/Arabic). Enter different values for "Title" and "Number" in both languages.
5.  **Frontend**: Visit the homepage in English and Arabic to verify the correct values are displayed.
6.  **Empty State**: Delete all hero statistics and verify that the statistics section is hidden on the homepage.

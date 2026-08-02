<?php

namespace App\Filament\Resources\BlogPosts\Schemas;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class BlogPostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Post')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(function (?string $state, callable $set, ?BlogPost $record): void {
                                if ($record?->exists) {
                                    return;
                                }

                                if (blank($state)) {
                                    return;
                                }

                                $set('slug', BlogPost::uniqueSlug(Str::slug($state)));
                            }),
                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true),
                        Select::make('status')
                            ->options([
                                BlogPost::STATUS_DRAFT => 'Draft',
                                BlogPost::STATUS_PUBLISHED => 'Published',
                            ])
                            ->required()
                            ->default(BlogPost::STATUS_DRAFT),
                        DateTimePicker::make('published_at')
                            ->label('Published at')
                            ->seconds(false),
                        Textarea::make('excerpt')
                            ->rows(3)
                            ->columnSpanFull(),
                        FileUpload::make('featured_image')
                            ->image()
                            ->disk('public')
                            ->directory('blogs/featured')
                            ->imageEditor()
                            ->maxSize(8192)
                            ->columnSpanFull(),
                        RichEditor::make('content')
                            ->toolbarButtons([
                                ['bold', 'italic', 'underline', 'strike', 'subscript', 'superscript', 'link', 'textColor'],
                                ['h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'paragraph'],
                                ['alignStart', 'alignCenter', 'alignEnd'],
                                ['blockquote', 'code', 'codeBlock', 'bulletList', 'orderedList'],
                                ['table', 'attachFiles'],
                                ['undo', 'redo'],
                            ])
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('blogs/content')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                Section::make('Taxonomy')
                    ->schema([
                        Select::make('categories')
                            ->relationship('categories', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(120),
                                TextInput::make('slug')
                                    ->maxLength(120),
                            ])
                            ->createOptionUsing(function (array $data): int {
                                $name = $data['name'];
                                $slug = filled($data['slug'] ?? null)
                                    ? BlogCategory::uniqueSlug(Str::slug($data['slug']))
                                    : BlogCategory::uniqueSlug(Str::slug($name));

                                return BlogCategory::query()->create([
                                    'name' => $name,
                                    'slug' => $slug,
                                ])->getKey();
                            }),
                        Select::make('tags')
                            ->relationship('tags', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->required()
                                    ->maxLength(120),
                                TextInput::make('slug')
                                    ->maxLength(120),
                            ])
                            ->createOptionUsing(function (array $data): int {
                                $name = $data['name'];
                                $slug = filled($data['slug'] ?? null)
                                    ? BlogTag::uniqueSlug(Str::slug($data['slug']))
                                    : BlogTag::uniqueSlug(Str::slug($name));

                                return BlogTag::query()->create([
                                    'name' => $name,
                                    'slug' => $slug,
                                ])->getKey();
                            }),
                    ])
                    ->columns(2),
                Section::make('SEO')
                    ->schema([
                        TextInput::make('meta_title')
                            ->maxLength(255),
                        Textarea::make('meta_description')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->columns(2)
                    ->collapsed(),
            ]);
    }
}

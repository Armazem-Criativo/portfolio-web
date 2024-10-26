<?php

namespace App\Filament\Pages;

use App\Models\HomeText;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class HomeTexts extends Page implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    protected static ?string $model = HomeText::class;

    protected static ?string $navigationLabel = 'Home - Textos';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.home-texts';

    public function mount(): void
    {
        $homeText = HomeText::first();

        if ($homeText) {
            $this->data = $homeText->toArray();
        } else {
            $this->data = [
                'name' => '',
                'acting' => '',
                'aboutme' => '',
                'git_btn_label' => '',
                'git_btn_link' => '',
                'linkedin_btn_label' => '',
                'linkedin_btn_link' => '',
                'curriculum_btn_label' => '',
                'curriculum_btn_link' => '',
                'tech_title' => '',
                'project_title' => '',
                'contact_title' => '',
            ];
        }

        $this->form->fill($this->data);
    }

    public function form(Form $form): Form
    {
        return $form->schema([
            Section::make('Seção - Banner -> Texto')->schema([
                RichEditor::make('name')->label('Nome')->required(),
                TextInput::make('acting')->label('Atuação')->required(),
                RichEditor::make('aboutme')->label('Sobre mim')->required(),
            ]),
            Section::make('Seção Banner -> Actions')->schema([
                TextInput::make('git_btn_label')->label('Nome do botão - Git'),
                TextInput::make('git_btn_link')->label('Link do botão - Git'),
                TextInput::make('linkedin_btn_label')->label('Nome do botão - Linkedin'),
                TextInput::make('linkedin_btn_link')->label('Link do botão - Linkedin'),
                TextInput::make('curriculum_btn_label')->label('Nome do botão - Currículo'),
                FileUpload::make('curriculum_btn_link')->preserveFilenames()->acceptedFileTypes(['application/pdf'])->disk('public')->directory('storage')->label('Anexar currículo')
            ])->columns(2),
            Section::make('Seção - Tecnologias')->schema([
                RichEditor::make('tech_title')->label('Título da seção')->required()
            ]),
            Section::make('Seção - Projetos')->schema([
                RichEditor::make('project_title')->label('Título da seção')->required()
            ]),
            Section::make('Seção - Contato')->schema([
                RichEditor::make('contact_title')->label('Título da seção')->required(),
            ]),
        ])->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Salvar')
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();

            $requiredFields = [
                'name', 'acting', 'aboutme', 'tech_title', 'project_title', 'contact_title'
            ];

            foreach ($requiredFields as $field) {
                if (empty($data[$field])) {
                    throw new \Exception("O campo \"$field\" não pode ser nulo.");
                }
            }

            HomeText::updateOrCreate(
                ['id' => $this->data['id'] ?? null],
                $data
            );

            $this->data = $data;
            $this->form->fill($this->data);

            Notification::make()
                ->success()
                ->title('Dados salvos com sucesso')
                ->send();
        } catch (\Exception $exception) {
            Notification::make()
                ->danger()
                ->title('Erro ao salvar os dados')
                ->body($exception->getMessage())
                ->send();
        }
    }
}
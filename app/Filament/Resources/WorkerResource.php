<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WorkerResource\Pages;
use App\Filament\Resources\WorkerResource\RelationManagers;
use App\Forms\Components\AnswerField;
use App\Forms\Components\Hero;
use App\Models\Worker;
use Filament\Forms;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Grid;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\View;

class WorkerResource extends Resource
{
    protected static ?string $model = Worker::class;

    protected static ?string $navigationLabel = 'Анкеты';
    protected static ?string $breadcrumb = 'Анкеты';



    protected static ?string $navigationIcon = 'heroicon-o-document-text';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Hero::make('name')->label('')->columnSpan('full'),





                Grid::make()
                    ->schema([
                        AnswerField::make('questions.one')
                            ->label('1. Какой мотив на данный момент является для вас самым основополагающим/главным – ради чего вы ходите на работу?')
                            ->columnSpan('full'),
                        AnswerField::make('questions.two')
                            ->label('2. Что Вам больше всего нравится в вашей работе?')->columnSpan('full'),
                        AnswerField::make('questions.three')->label('3. Что Вам не нравится в вашей работе больше всего?')->columnSpan('full'),
                        AnswerField::make('questions.four')->label('4. Какой из перечисленных неэтичных поступков наиболее неприемлем?')->columnSpan('full'),
                        AnswerField::make('questions.five')->label('5. Какой способ коммуникации в коллективе является наиболее эффективным?')->columnSpan('full'),
                        AnswerField::make('questions.six')->label('6. Какой из перечисленных вариантов является наиболее действенным для решения конфликтов на рабочем месте?')->columnSpan('full'),
                        AnswerField::make('questions.seven')->label('7. Какого принципа следует придерживаться в общении с коллегами?')->columnSpan('full'),
                        AnswerField::make('questions.eight')->label('8. Каким образом следует реагировать на невежливость со стороны коллег?')->columnSpan('full'),
                        AnswerField::make('questions.nine')->label('9. Какие качества наиболее важны для успешного межличностного общения в команде?')->columnSpan('full'),
                        AnswerField::make('questions.ten')->label('10. Какая манера общения у Вашего непосредственного руководителя?')->columnSpan('full'),
                        AnswerField::make('questions.aone')->label('11. Какая у Вас манера общения с коллегами?')->columnSpan('full'),
                        AnswerField::make('questions.atwo')->label('12. Какая у Вас манера общения с подчиненными? (отвечаете, если есть подчиненные)')->columnSpan('full'),
                        AnswerField::make('questions.athree')->label('13. Что является наиболее важным при работе в коллективе?')->columnSpan('full'),
                        AnswerField::make('questions.afour')->label('14. Какие свои личностные качества считаете важными для эффективной работы?')->columnSpan('full'),
                        AnswerField::make('questions.afive')->label('15. Как вы оцениваете свои результаты в работе по сравнению со своими ожиданиями?')->columnSpan('full'),
                        AnswerField::make('questions.asix')->label('16. Как улучшить свою способность принимать решения на работе?')->columnSpan('full'),
                        AnswerField::make('questions.aseven')->label('17. Какие препятствия чаще всего мешают выполнению задач?')->columnSpan('full'),
                        AnswerField::make('questions.aeight')->label('18. Как Вы обычно решаете проблемные задачи на работе?')->columnSpan('full'),
                        AnswerField::make('questions.anine')->label('19. Как вы планируете улучшить свою эффективность?')->columnSpan('full'),
                        AnswerField::make('questions.aten')->label('20. Как бы вы поступили, имея такую возможность, с сотрудником, который постоянно общается на повышенных тонах и оскорбляет коллег?')->columnSpan('full'),
                        AnswerField::make('questions.bone')->label('21. Что бы вы изменили в Вашей работе, если бы имели такую возможность?')->columnSpan('full'),
                        AnswerField::make('questions.btwo')->label('22. Что бы вы изменили в работе Компании, если бы имели такую возможность?')->columnSpan('full'),
                        AnswerField::make('questions.bthree')->label('23. С каким из отделов/коллег возникают сложности в общении и решении производственных вопросов')->columnSpan('full'),

                        // AnswerField::make('questions.two')
                        // ->label('')->columnSpan('full'),
                    ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name')->label('Имя')->sortable()->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListWorkers::route('/'),
            // 'create' => Pages\CreateWorker::route('/create'),
            'view' => Pages\ViewWorker::route('/{record}'),
            // 'edit' => Pages\EditWorker::route('/{record}/edit'),
        ];
    }
}

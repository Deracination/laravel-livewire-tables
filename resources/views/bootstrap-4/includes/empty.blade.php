<tr>
    <td colspan="{{ collect($columns)->count() }}">
    @if($this->getOption('message.empty'))
        {{ $this->getOption('message.empty') }}
    @else
    @lang('laravel-livewire-tables::strings.no_results')
    @endif
    </td>
</tr>

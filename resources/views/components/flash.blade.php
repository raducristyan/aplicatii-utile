@if ( session()->has('flash.body') )
<flash-message-view v-show="modalIsOpen('flash-message')" @open-flash="openFlash" @close-modal="closeModal" :modal-is-open="modalIsOpen('flash-message')" inline-template>

    @includeWhen(session()->has('flash.type'), 'components.flash.'.session()->get('flash.type'));

</flash-message-view>
@endif
require('./bootstrap');
import Vue from 'vue';
import Axios from 'axios';
window.util = require('./util');

import UserProfile from './components/UserProfile.vue';
import UserPassword from './components/UserPassword.vue';
import InstitutionProfile from './components/InstitutionProfile.vue';
import Address from './components/Address.vue';
import NewUser from './components/NewUser.vue';
import FlashMessage from './components/FlashMessage.vue';

let handleOutsideClick;
Vue.directive('closable', {
    bind(el, binding, vnode) {
        // Here's the click/touchstart handler
        // (it is registered below)
        handleOutsideClick = (e) => {
            e.stopPropagation()
            // Get the handler method name and the exclude array
            // from the object used in v-closable
            const {
                handler,
                exclude
            } = binding.value
            // This variable indicates if the clicked element is excluded
            let clickedOnExcludedEl = false;
            exclude.forEach(refName => {
                // We only run this code if we haven't detected
                // any excluded element yet
                if (!clickedOnExcludedEl) {
                    // Get the element using the reference name
                    const excludedEl = vnode.context.$refs[refName]
                    // See if this excluded element
                    // is the same element the user just clicked on
                    clickedOnExcludedEl = excludedEl.contains(e.target)
                }
            })
            // We check to see if the clicked element is not
            // the dialog element and not excluded
            if (!el.contains(e.target) && !clickedOnExcludedEl) {
                // If the clicked element is outside the dialog
                // and not the button, then call the outside-click handler
                // from the same component this directive is used in
                vnode.context[handler]()
            }
        }
        // Register click/touchstart event listeners on the whole page
        document.addEventListener('click', handleOutsideClick)
        document.addEventListener('touchstart', handleOutsideClick)
    },
    unbind() {
        // If the element that has v-closable is removed, then
        // unbind click/touchstart listeners from the whole page
        document.removeEventListener('click', handleOutsideClick)
        document.removeEventListener('touchstart', handleOutsideClick)
    }
})

const vm = new Vue({
    el: '#app',
    data: {
        activeTab: '',
        userMenu: {
            isVisible: false,
        },
        modal: {
            opened: []
        },
        navBarToggle: false,
    },

    components: {
        'address-view': Address,
        'new-user-view': NewUser,
        'user-profile-view': UserProfile,
        'user-password-view': UserPassword,
        'institution-profile-view': InstitutionProfile,
        'flash-message-view': FlashMessage
    },

    mounted() {
        this.getActiveTab();
    },

    computed: {
        modalOpened: function() {
            return this.modal.opened.length
        }
    },

    methods: {
        logout: function() {
            Axios.post('logout', {})
                .then(function(response) {
                    window.location.reload(true);
                })
        },

        setActiveTab(tab) {
            this.activeTab = tab;
            localStorage.setItem('activeTab', tab);
        },

        getActiveTab() {
            this.activeTab = localStorage.getItem('activeTab') ? localStorage.getItem('activeTab') : 'activity'
        },

        onClose() {
            this.userMenu.isVisible = false;
        },

        modalIsOpen(modal) {
            return Boolean(this.modal.opened.filter((val, i, arr) => {
                return val == modal
            }).length)
        },

        openFlash(flash) {
            this.modal.opened.push(flash)
        },

        openModal(modal) {
            if (!this.modalIsOpen(modal)) {
                this.modal.opened.push(modal)
                this.addClass('body', 'overflow-y-hidden')
            }
        },

        closeModal(modal) {
            this.modal.opened = this.modal.opened.filter((val, i, arr) => {
                return val != modal
            })
            this.removeClass('body', 'overflow-y-hidden')
        },

        addClass(el, cls) {
            document.querySelector(el).classList.add(cls)
        },

        removeClass(el, cls) {
            document.querySelector(el).classList.remove(cls)
        },

    }
});
<template>
    <div :id="groupId + '-' + item.id" :class="{'is-active': item.active}">
        <dt class="bg-black opacity-50 text-white text-left text-xl rounded p-4">
            <button @click="toggle" class="accordion-item-trigger">
                <div class="flex flex-row gap-3">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <div class="text-left">
                        <h4>{{item.title}}</h4>
                    </div>
                </div>
            </button>
        </dt>
        <transition
            name="faq-item"
            @enter="startTransition"
            @after-enter="endTransition"
            @before-leave="startTransition"
            @after-leave="endTransition">
            <dd v-if="item.active" class="flex flex-row bg-white p-4">
                <div class="text-red font-bold mr-3">A.</div>
                <div v-html="item.details" class="text-black text-left"></div>
            </dd>
        </transition>
    </div>
</template>

<script>
export default {
    name: "FaqItemComponent",
    props: ['item', 'multiple', 'groupId'],
    methods: {
        toggle(event) {
            if (this.multiple) this.item.active = !this.item.active
            else {
                this.$parent.$children.forEach((item, index) => {
                    if (item.$el.id === event.currentTarget.parentElement.parentElement.id) item.item.active = !item.item.active
                    else item.item.active = false
                })
            }
        },

        startTransition(el) {
            el.style.height = el.scrollHeight + 'px'
        },

        endTransition(el) {
            el.style.height = ''
        }
    }
}
</script>

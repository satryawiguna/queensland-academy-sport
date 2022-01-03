<template>
    <div class="flex flex-row justify-center bg-no-repeat bg-cover bg-fixed py-20 bg-taliqua">
        <div class="flex flex-col text-center gap-2 basis-4/6">
            <h2 class="text-5.3xl font-bold font-Guthen text-white mb-5">FAQs</h2>
            <faq-item-component
                v-for="item in content"
                :multiple="multiple"
                :item="item"
                :groupId="groupId"
                :key="item.id">
            </faq-item-component>
        </div>
    </div>
</template>

<script>
import FaqItemComponent from "./FaqItemComponent";

export default {
    components: {
        FaqItemComponent
    },
    props: {
        multiple: {
            type: Boolean,
            default: false
        }
    },
    data() {
        return {
            groupId: null,
            content: [
                {
                    id: 1,
                    active: true,
                    title: 'Who is eligible to apply for this program?',
                    details: 'You will not be eligible for this general Talent Identification program. However, you may be eligible for some sport specific programs which are likely to be opened up later in 2022 and in 2023. Skateboarding and Diving would be examples of younger age groups that can be accommodated in specific campaigns for those with 2032 aspirations.'
                },
                {
                    id: 2,
                    active: false,
                    title: 'What if I am younger than 13 in 2022 or older than 23 in 2022?',
                    details: 'You will not be eligible for this general Talent Identification program. However, you may be eligible for some sport specific programs which are likely to be opened up later in 2022 and in 2023. Skateboarding and Diving would be examples of younger age groups that can be accommodated in specific campaigns for those with 2032 aspirations.'
                },
                {
                    id: 3,
                    active: false,
                    title: 'Can I still aim to go to the Olympics in 2032, even if I don’t try out in the QAS TID Program.',
                    details: 'You will not be eligible for this general Talent Identification program. However, you may be eligible for some sport specific programs which are likely to be opened up later in 2022 and in 2023. Skateboarding and Diving would be examples of younger age groups that can be accommodated in specific campaigns for those with 2032 aspirations.'
                },
                {
                    id: 4,
                    active: false,
                    title: 'If I get offered a chance to try a new sport through this TID program, does this mean that I have to give up the sports that I am doing already?',
                    details: 'You will not be eligible for this general Talent Identification program. However, you may be eligible for some sport specific programs which are likely to be opened up later in 2022 and in 2023. Skateboarding and Diving would be examples of younger age groups that can be accommodated in specific campaigns for those with 2032 aspirations.'
                },
                {
                    id: 5,
                    active: false,
                    title: 'I noticed that my region isn’t on the testing list. Can I still participate?',
                    details: 'You will not be eligible for this general Talent Identification program. However, you may be eligible for some sport specific programs which are likely to be opened up later in 2022 and in 2023. Skateboarding and Diving would be examples of younger age groups that can be accommodated in specific campaigns for those with 2032 aspirations.'
                },
                {
                    id: 6,
                    active: false,
                    title: 'Do I have to relocate from my home and region to join this Talent Development program?',
                    details: 'You will not be eligible for this general Talent Identification program. However, you may be eligible for some sport specific programs which are likely to be opened up later in 2022 and in 2023. Skateboarding and Diving would be examples of younger age groups that can be accommodated in specific campaigns for those with 2032 aspirations.'
                },
                {
                    id: 7,
                    active: false,
                    title: 'Can athletes with a disability also participate in this program?',
                    details: 'You will not be eligible for this general Talent Identification program. However, you may be eligible for some sport specific programs which are likely to be opened up later in 2022 and in 2023. Skateboarding and Diving would be examples of younger age groups that can be accommodated in specific campaigns for those with 2032 aspirations.'
                }
            ]
        }
    },
    mounted() {
        this.groupId = this.$el.id
    }
}
</script>

<script setup>
    import Navbar from '@/Components/Chat/Navbar.vue';
    import Header from '@/Components/Chat/Header.vue';
    import Messages from '@/Components/Chat/Messages.vue';
    import Footer from '@/Components/Chat/Footer.vue';
    import { useMessageStore } from '@/store/useMessagesStore';

    const messageStore = useMessageStore();

    const props = defineProps({
        room: {
            type: Object,
            required: true,
        }
    });

    messageStore.fetchMessages(props.room.slug);
</script>

<template>
    <head title="Messages" />
        <div>
            <!-- Page Container -->
            <div
                id="page-container"
                class="relative mx-auto h-screen min-w-[320px] bg-white lg:ms-80"
            >
                <!-- Page Sidebar -->
                <Navbar />

                <!-- Page Header -->
                <Header />

                <!-- Page Content -->
                <Messages />
                {{ messageStore.allMessages }}
                <!-- Page Footer -->
                <Footer v-on:valid="console.log($event)" />
            </div>
            <!-- END Page Container -->
        </div>
</template>

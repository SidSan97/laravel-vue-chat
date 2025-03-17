<script setup>
    import Navbar from '@/Components/Chat/Navbar.vue';
    import Header from '@/Components/Chat/Header.vue';
    import Messages from '@/Components/Chat/Messages.vue';
    import Footer from '@/Components/Chat/Footer.vue';
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

                <!-- Page Footer -->
                <Footer v-on:valid="console.log($event)" />
            </div>
            <!-- END Page Container -->
        </div>
</template>

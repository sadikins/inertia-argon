<script setup>
 import AppLayout from '@/Layouts/AppLayout.vue';
 import Pagination from '@/Components/Pagination.vue';
 import { Link, Head } from '@inertiajs/inertia-vue3';
 import { ref, reactive } from 'vue';

 const props = defineProps({
     contacts: Object,
 });

 
</script>

<template>
    <AppLayout title="Contacts">

        <template #title>
            Contact
        </template>

        <div class="row mt-4">
            <div class="card">
                <div class="card-header">
                    <h6>Contact</h6>
                </div>
                <div class="card-body">
                    <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Name</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Phone</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Address</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Action</th>
                            </tr>

                        </thead>
                        <tbody>
                            <tr v-for="(contact, index) in contacts.data" :key="index">
                                <td class="mb-0 text-sm"> <h6># {{ contact.name }}</h6></td>
                                <td class="mb-0 text-sm"> <p class="text-sm font-weight-bold mb-0">{{ contact.email }}</p></td>
                                <td class="mb-0 text-sm"> <p class="text-sm font-weight-bold mb-0">{{ contact.phone }}</p></td>
                                <td class="mb-0 text-sm"> <p class="text-sm font-weight-bold mb-0">{{ contact.address }}</p></td>
                                <td class="mb-0 text-sm">
                                    <button class="btn btn-primary me-2">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                         
                            </tr>
                        </tbody>
                    </table>
                    <Pagination class="mt-10" :links="contacts.links" :page="contacts"/>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
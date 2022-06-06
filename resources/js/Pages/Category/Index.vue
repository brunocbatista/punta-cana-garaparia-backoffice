<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
    categories: Array,
});

</script>

<template>
    <AppLayout title="Categorias">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Categorias
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <table class="w-full whitespace-nowrap">
                        <tr class="text-left font-bold">
                            <th class="pb-4 pt-6 px-6">Nome</th>
                            <th class="pb-4 pt-6 px-6">Descrição</th>
                            <th class="pb-4 pt-6 px-6" colspan="2">Ativo</th>
                        </tr>
                        <tr v-for="category in categories" :key="category.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
                            <td class="border-t">
                                <Link class="flex items-center px-6 py-4" :href="`/categories/${category.id}/edit`" tabindex="-1">
                                    {{ category.name }}
                                </Link>
                            </td>
                            <td class="border-t">
                                <Link class="flex items-center px-6 py-4" :href="`/categories/${category.id}/edit`" tabindex="-1">
                                    {{ category.description }}
                                </Link>
                            </td>
                            <td class="border-t">
                                <Link class="flex items-center px-6 py-4" :href="`/categories/${category.id}/edit`" tabindex="-1">
                                    {{ category.active ? 'Sim' : 'Não' }}
                                </Link>
                            </td>
                            <td class="w-px border-t">
                                <Link class="flex items-center px-4" :href="`/categories/${category.id}/edit`" tabindex="-1">
                                    <icon name="cheveron-right" class="block w-6 h-6 fill-gray-400" />
                                </Link>
                            </td>
                        </tr>
                        <tr v-if="!categories || categories.length === 0">
                            <td class="px-6 py-4 border-t text-center" colspan="4">Não encontramos categorias.</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

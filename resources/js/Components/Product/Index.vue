<template>
    <div>
        <div class="w-4/5 my-20 mx-20">
            <input  class="border-1"
                    type="text"
                    placeholder="Search for products"
                    v-model.trim="productFindTerm" />
            <table class="w-full table-fixed mx-20 border-separate border-spacing-5">
                <thead>
                    <tr class="bg-black text-white">
                        <th class="w-3/6">
                            Name
                        </th>
                        <th class="w-1/6">
                            Code
                        </th>
                        <th class="w-1/6">
                            Description
                        </th>
                        <th class="w-1/6 bg-white">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="product in productsFiltered">
                        <td>
                            {{ product.name }}
                        </td>
                        <td>
                            {{ product.code }}
                        </td>
                        <td>
                            {{ product.description }}
                        </td>
                        <td>
                            <a v-if="product.deleted_at" @click="restoreProduct(product.uuid)">Restore</a>
                            <a v-else @click="deleteProduct(product.uuid)">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'ProductIndex',
        props: ['products'],
        data() {
            return {
                productFindTerm: ''
            }
        },
        computed: {
            productsFiltered() {
                return this.products.filter(product => {
                    const serachString = product.name.toLowerCase() + product.code.toLowerCase() + product.description.toLowerCase();
                    const searchText = this.productFindTerm.toLowerCase();

                    return serachString.includes(searchText);
                });
            }
        },
        methods: {
            deleteProduct: function (productId) {
                axios
                .delete('/api/products/' + productId)
                .then(response => {alert('Deleted: ' + productId)})
                .catch(error => {alert(error.message)});
            },
            restoreProduct: function (productId) {
                axios
                .put('/api/products/restore/' + productId)
                .then(response => {alert('Restored: ' + productId)})
                .catch(error => {alert(error.message)});
            }
        }
    }
</script>

<style>
</style>
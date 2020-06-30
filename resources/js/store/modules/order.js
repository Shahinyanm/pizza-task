import axios from 'axios'
import { v4 as uuidv4 } from 'uuid';

export default {
   state: {
      currentOrder: {},
   },
   getters: {
      currentOrder: state => state.currentOrder
   },
   mutations: {
      UPDATE_ORDER (state, order) {
         state.currentOrder = order;
      },
      FINISH_ORDER (state) {
         state.currentOrder = {};
      }
   },
   actions: {
      async addToCart ({commit, state}, {id, count}) {
         try {
            if (localStorage.getItem("current_order") === null) {
               localStorage.setItem('current_order', uuidv4());
            }
            const currentOrder = localStorage.getItem("current_order");
            
            const data = {
               ...state.currentOrder.data,
               [id]: count
            }
            
            const result = await axios.put(`/api/orders/${currentOrder}`, {data});
            const { data: order } = result;
            commit('UPDATE_ORDER', order);
         }catch (e) {
            console.log(e);
            
         }
      },
      async removeFromCart ({commit, state}, {id}) {
         try {
            const currentOrder = localStorage.getItem("current_order");
            const data = state.currentOrder.data;
            delete data[id];
            
            const result = await axios.put(`/api/orders/${currentOrder}`, {data});
            const { data: order } = result;
            commit('UPDATE_ORDER', order);
         } catch (e) {
            console.log(e);
            
         }
      },
      async getOrder ({commit}) {
         try {
            const currentOrder = localStorage.getItem("current_order");
            if (currentOrder) {
               const result = await axios.get(`/api/orders/${currentOrder}`);
               const { data: order } = result;
               return commit('UPDATE_ORDER', order);
            }
         } catch (e) {
            console.log(e);
         }
      },
      async submitOrder ({commit}, {data}) {
         try {
            if (localStorage.getItem("user_id") === null) {
               localStorage.setItem('user_id', uuidv4());
            }
            const userId = localStorage.getItem("user_id");

            const currentOrder = localStorage.getItem("current_order");
            if (currentOrder) {
               const result = await axios.post(`/api/orders/${currentOrder}/submit/${userId}`, data);
               const { data: order } = result;
               localStorage.removeItem('current_order')

               return order.id;
            }
         } catch (e) {
            console.log(e);
         }
      },
      finishOrder ({commit}) {
         commit('FINISH_ORDER')
      }
   }
}
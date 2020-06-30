import axios from 'axios'

export default {
   state: {
      foods: {
         pizza: [],
         drinks: [],
         pasta: [],
      },
   },
   getters: {
      foods: state => {
         return state.foods;
       }
   },
   mutations: {
      SET_FOODS (state, foods) {
         state.foods = foods
      }
   },
   actions: {
      async getFoods ({commit}) {
         const result = await axios.get('/api/foods');
         const { data: { data } } = result;
         return commit('SET_FOODS', data);
      }
   }
}
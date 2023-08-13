import { configureStore } from "@reduxjs/toolkit";
import { combineReducers } from "redux";

const mainData = (state = {}, action) => {
    const { type, payload } = action
    switch (type) {
     case 'setMainData':
        return {
            ...state
        }
     default:
      return state
    }
}

const searchData = (state = {}, action) => {
    const { type, payload } = action
    switch (type) {
     case 'setSearchData':
        return {
            ...state,
            loaded: true,
            products: {
                ...payload
            }
        }
     default:
      return state
    }
}

const reducer = combineReducers({
    mainData,
    searchData
})

export const store = configureStore({
    reducer,
    preloadedState: {
        mainData: {
            loaded: false,
            newArrival: [],
            bestsellers: []
        },
        searchData: {
            loaded: false,
            products: {
                page: 1,
                count: 0,
                list: []
            }
        }
    }
});
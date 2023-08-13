import { configureStore } from "@reduxjs/toolkit";
import { combineReducers } from "redux";

const mainData = (state = {}, action) => {
    const { type, payload } = action
    switch (type) {
     case 'setMainData':
        return {
            ...state,
            mainData: {
                loaded: true,
                newArrival: [1]
            }
        }
     default:
      return state
    }
}

const reducer = combineReducers({
    mainData
})

export const store = configureStore({
    reducer,
    preloadedState: {
        mainData: {
            loaded: false,
            newArrival: [],
            bestsellers: []
        }
    }
});
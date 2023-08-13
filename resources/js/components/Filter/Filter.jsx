import { Button } from "../../components/Button/Button.jsx"
import { FilterItem } from "./FilterItem.jsx"

export const Filter = ({ data, handler }) => {
    const { items } = data
    return (
      <div className="filter">
        {
            items.map((v, i) => <FilterItem data={ v } key={ i } />)
        }
        <Button className="secondary fluid button" onClick={() => handler(data)}>Apply</Button>
      </div>
      
    )
}

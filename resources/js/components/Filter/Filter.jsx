import { Button } from "../../components/Button/Button.jsx"
import { FilterItem } from "./FilterItem.jsx"

export const Filter = ({ data }) => {
    const { items } = data
    return (
      <div className="filter">
        {
            items.map((v, i) => <FilterItem data={ v } key={ i } />)
        }
        <Button className="secondary fluid button">Apply</Button>
      </div>
      
    )
}

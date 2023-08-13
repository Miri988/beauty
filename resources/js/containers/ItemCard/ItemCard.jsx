import { Stars } from "../../components/Stars/Stars.jsx";
import { Button } from "../../components/Button/Button.jsx";


export const ItemCard = (props) => {
    const { id, title, description, price, rating, image } = props;
    const openCard = () => {
        window.location.href = `${window.location.href}/${id}`
      }
    
    
    return (
        <div className="item-card" onClick = {openCard}>
            <div className="square image">
                <div className="content">
                    <img src={ image } alt = ""/>
                </div>
            </div>
            <div className="content">
                <div className="header">{ title }</div>
                <Stars rating = { rating } />
                <div className="description">{ description }</div>
                <span className="price">${ price }</span>
                <Button className="secondary fluid button">Add to Bag</Button>
            </div>
        </div>
    )
  }
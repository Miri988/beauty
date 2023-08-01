import { useParams } from 'react-router-dom';
import { Stars } from '../../components/Stars/Stars.jsx';
import styles from "./ProductCard.module.scss"
import { Button } from '../../components/Button/Button.jsx';
import { Accordion } from '../../components/Accordion/Accordion.jsx';
import { Slider } from '../../containers/Slider/Slider.jsx';
import { useState } from 'react';
import { ItemCard } from '../../containers/ItemCard/ItemCard.jsx';
import { ReviewFeed } from '../../components/ReviewFeed/ReviewFeed.jsx';
import bloom_left from "../../assets/images/bloom_left.png";
import bloom_right from "../../assets/images/bloom_right.png";


export const ProductCard = () => {

  const [activeImage, setActiveImage] = useState(0)

  const images = [
    's1.png',
    's2.png',
    's3.png',
    's4.png',
    's5.png'
  ]

  const { productId } = useParams()

  return (
    <div className={styles.main}>
      <div className="product">
        <div className="preview">
          <Slider size={1} className="basic" initial={activeImage} onChange={(v) => setActiveImage(v)}>
            {
              images.map((v, i) => <img src={`/images/${v}`} alt="img" key={i} />)
            }
          </Slider>
          <div className="images">
            {
              images.map((v, i) => {
                return <div className={`square image ${i === activeImage ? 'active' : ''}`} key={i} onClick={() => setActiveImage(i)}>
                  <div className="content">
                    <img src={`/images/${v}`} alt="img" />
                  </div>
                </div>
              })
            }
          </div>
        </div>
        <div className="info">
          <div className={`header ${styles.header}`}>Dewy Glow Jelly Cream</div>
          <div className={styles.rate}>
            <Stars className = {styles.starts}/>
            <span className="text">3 reviews</span>
          </div>
          <div className={styles.price}>26$</div>
          <div className={styles.description}>A gel moisturizer packed with glow-boosting Cherry Blossom Extracts, visibly brightening niacinamide, and hydrating betaine from sugar beets. Advanced with glycerin and Cherry Blossom flavanoids with visibly soothing and moisturizing benefits for skin that’s ready for makeup! Dermatologist tested.</div>
          <div className={styles.size}>Size: 50 ml</div>
          <Button className={`button wide ${styles.btn}`}>Add To Card</Button>
          <Accordion className = "secondary" expanded title = "WHAT MAKES IT GOOD">A clear, water-jelly cream with Cherry Blossom and Niacinamide that delivers a burst of hydration and glow for visibly brighter, dewy skin. Key Ingredients Cherry Blossom Flavonoids: visibly soothing Niacinamide: visibly brightening Sugar Beet Betaine: hydrating</Accordion>
          <Accordion className = "secondary" title = "INGREDIENTS">A clear, water-jelly cream with Cherry Blossom and Niacinamide that delivers a burst of hydration and glow for visibly brighter, dewy skin. Key Ingredients Cherry Blossom Flavonoids: visibly soothing Niacinamide: visibly brightening Sugar Beet Betaine: hydrating</Accordion>
          <Accordion className = "secondary" title = "HOW TO USE">A clear, water-jelly cream with Cherry Blossom and Niacinamide that delivers a burst of hydration and glow for visibly brighter, dewy skin. Key Ingredients Cherry Blossom Flavonoids: visibly soothing Niacinamide: visibly brightening Sugar Beet Betaine: hydrating</Accordion>
        </div>
      </div>


      <div className={styles.review}>
        <div className="center aligned margin">
          <div className={`heavier upper header ${styles.header}`}>
            <img src = {bloom_left} alt = ""/>
            Read The Reviews
            <img src = {bloom_right} alt = ""/>
            <div className="link subheader">See All</div>
          </div>
          <Button className={`button wide secondary ${styles.btn}`}>Write A Review</Button>
        </div>
        <div className="feed">
            <ReviewFeed/>
            <ReviewFeed/>
            <ReviewFeed/>
        </div>
        <div className={styles.recently}>
          <div className="center aligned margin">
            <div className={`heavier upper header ${styles.header}`}>
              <img src = {bloom_left} alt = ""/>
              Recently Viewed Products
              <img src = {bloom_right} alt = ""/>
              <div className="link subheader">See All</div>
            </div>
          </div>
          <div className={styles.grid}>
            <ItemCard />
            <ItemCard />
            <ItemCard />
            <ItemCard />
          </div>
        </div>
        <div className={styles.like}>
          <div className="center aligned margin">
            <div className={`heavier upper header ${styles.header}`}>
              <img src = {bloom_left} alt = ""/>
              You May Also Like
              <img src = {bloom_right} alt = ""/>
            <div className="link subheader">See All</div>
           </div>
           </div>
          <Slider size={4}>
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
                <ItemCard />
          </Slider>
        </div>

        

      </div>
    </div>
   
  )
}

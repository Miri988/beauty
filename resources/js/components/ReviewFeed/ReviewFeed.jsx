import { Stars } from "../../components/Stars/Stars.jsx"
import { UserImage } from "../../components/UserImage/UserImage.jsx"
import dividerImage from "../../assets/images/deviderw.png"

import styles from "./ReviewFeed.module.scss"


export const ReviewFeed = () => {
  return (
    <div className={styles.review}>
            <div className="flex">
                <UserImage name = "Cathy K." img = "Ellipse.png"/>
                <div className={styles.info}>
                    <div className={styles.name}>
                        Cathy K.
                    </div>
                    <Stars/>
                    <div className={`upper ${styles.title}`}>
                        VERY MOISTURIZING
                    </div>
                    <div className={styles.description}>
                        I didn’t know how effective the gel cream would be since I was skeptical of the texture, but my sensitive skin loved it and I didn’t even break out when I first started using it. Love it!
                    </div>
                    <div className={styles.images}>
                        <img src="/images/review/rew.png" alt="rew"/>  
                    </div>
                </div>
                <div className="date">
                26/02/23
                </div>
            </div>
            <div className={styles.divider}>
                <img src={dividerImage} alt=""/>
            </div>
    </div>
    
    
  )
}

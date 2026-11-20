import type { HatType } from "./hatType"

export interface CactusType {
  id: number
  name: string
  type: 'harcos' | 'varazslo' | 'sarkany'
  owner: string
  image_path: string
  dmg: number
  hp: number
  speed: number
  mana: number
  hat: HatType | null
}
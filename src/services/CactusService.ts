import type { CactusInput, CactusType } from '../types/cactusType'
import type { HatType } from '../types/hatType'

async function parseError(response: Response): Promise<Record<string, string[]>> {
  const data = await response.json().catch(() => null)
  return data?.errors ?? {}
}

export async function getCacti(): Promise<CactusType[]> {
  const response = await fetch('/api/cacti', { headers: { Accept: 'application/json' } })
  if (!response.ok) throw new Error('Nem sikerült betölteni a kaktuszokat.')
  const data = await response.json()
  return data.data
}

export async function getHats(): Promise<HatType[]> {
  const response = await fetch('/api/hats', { headers: { Accept: 'application/json' } })
  if (!response.ok) throw new Error('Nem sikerült betölteni a kalapokat.')
  const data = await response.json()
  return data.data
}

export async function createCactus(cactus: CactusInput): Promise<CactusType> {
  const response = await fetch('/api/cacti', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json', Accept: 'application/json' },
    body: JSON.stringify(cactus),
  })

  if (!response.ok) {
    throw { errors: await parseError(response) }
  }

  const data = await response.json()
  return data.data
}
